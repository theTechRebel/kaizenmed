<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rabbitmq extends CI_Controller {

		public function index(){}

		public function send(){
				$con = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
				$channel =  $con->channel();
				$channel->queue_declare('hello', false, false, false, false);
				$msg = new PhpAmqpLib\Message\AMQPMessage('Hello World!');
				$channel->basic_publish($msg, '', 'hello');
				echo "[x] Sent 'Hello World!'\n".PHP_EOL;
				$channel->close();
				$con->close();
		}

		public function recieve(){
			$connection = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
			$channel = $connection->channel();
			$channel->queue_declare('hello', false, false, false, false);
	
			echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

			$callback = function($msg) {
  				echo " [x] Received ", $msg->body, "\n";
				};

			$channel->basic_consume('hello', '', false, true, false, false, $callback);

				while(count($channel->callbacks)) {
    $channel->wait();
				}
		}

		public function new_task(){
					$con = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
				$channel =  $con->channel();
				$channel->queue_declare('task_queue_', false, true, false, false);

				$data = "Hello World.......";

				$msg = new PhpAmqpLib\Message\AMQPMessage($data,array('delivery_mode'=> 2));
				$channel->basic_publish($msg, '', 'task_queue_');
				echo " [x] Sent ", $data, "\n";
				$channel->close();
				$con->close();
		}

		public function worker(){
						$connection = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
			$channel = $connection->channel();
			$channel->queue_declare('task_queue_', false, true, false, false);
	
			echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

			$callback = function($msg) {
  				echo " [x] Received ", $msg->body, "\n";
  				sleep(substr_count($msg->body, '.'));
  				echo " [x] Done", "\n";
  				$msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
				};

			$channel->basic_qos(null, 1, null);
			$channel->basic_consume('task_queue_', '', false, false, false, false, $callback);

				while(count($channel->callbacks)) {
    $channel->wait();
				}
		}



		public function emit_logs(){
				$connection = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
				$channel = $connection->channel();

				$channel->exchange_declare('logs', 'fanout', false, false, false);
				$data = "info: Hello World!";
				$msg = new PhpAmqpLib\Message\AMQPMessage($data);

				$channel->basic_publish($msg, 'logs');

				echo " [x] Sent ", $data, "\n";

				$channel->close();
				$connection->close();
		}


		public function recieve_logs(){
			$connection = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
			$channel = $connection->channel();

$channel->exchange_declare('logs', 'fanout', false, false, false);

list($queue_name, ,) = $channel->queue_declare("", false, false, true, false);

$channel->queue_bind($queue_name, 'logs');

echo ' [*] Waiting for logs. To exit press CTRL+C', "\n";

$callback = function($msg){
  echo ' [x] ', $msg->body, "\n";
};

$channel->basic_consume($queue_name, '', false, true, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();
		}


		public function emit_log_direct(){
			$connection = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
			$channel = $connection->channel();

			$channel->exchange_declare('direct_logs', 'direct', false, false, false);

			//$severity = "info";
			//$severity = "error";
			$severity = "warning";

			$data = "Hello World!";

			$msg = new PhpAmqpLib\Message\AMQPMessage($data);

			$channel->basic_publish($msg, 'direct_logs', $severity);

			echo " [x] Sent ",$severity,':',$data," \n";

			$channel->close();
			$connection->close();

		}


		public function receive_logs_direct(){
			$connection = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
			$channel = $connection->channel();

			$channel->exchange_declare('direct_logs', 'direct', false, false, false);

			list($queue_name, ,) = $channel->queue_declare("", false, false, true, false);

			$argv =array('warning','info','error');
			$severities = array_slice($argv, 1);
			if(empty($severities )) {
			    file_put_contents('php://stderr', "Usage: $argv[0] [info] [warning] [error]\n");
			    exit(1);
			}

			foreach($severities as $severity) {
			    $channel->queue_bind($queue_name, 'direct_logs', $severity);
			}

			echo ' [*] Waiting for logs. To exit press CTRL+C', "\n";

			$callback = function($msg){
			  echo ' [x] ',$msg->delivery_info['routing_key'], ':', $msg->body, "\n";
			};

			$channel->basic_consume($queue_name, '', false, true, false, false, $callback);

			while(count($channel->callbacks)) {
			    $channel->wait();
			}

			$channel->close();
			$connection->close();
		}


		public function send_json_data(){
			 $con = new PhpAmqpLib\Connection\AMQPConnection('localhost', 5672, 'guest', 'guest');
				$channel =  $con->channel();
				$channel->queue_declare('hello', false, false, false, false);
				$array = array('name'=>'Kenneth',
					              'surname'=>'Dube',
					              'condition'=>'Heart Failure',
					              'treated'=>'16-07-15',
					              'results'=>'Cardiac Arrest');
				$msg = new PhpAmqpLib\Message\AMQPMessage(json_encode($array));
				$channel->basic_publish($msg, '', 'hello');
				echo "[x] Sent JSON Data\n".PHP_EOL;
				$channel->close();
				$con->close();
		}























































}