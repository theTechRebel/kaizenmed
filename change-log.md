23 September 2015
=
	KaizenMed V 1.1.1

RELEASE NOTES:
=
Stable Release
Completed Clients Module with all required Actions


CHANGES:
1. Added display of clients details in commit 7eddb4e630c1826cf8799b70b56a5db8dccce44f
			The Clients Module: http://localhost/kaizen/KaizenMed/clients shows an interface with all
			Clients present in the database from clients table using GroceryCRUD Plugin.
			Main Uses of the Clients Module:
			1. CRUD clients
			2. Viewing additional info related to each client such as Medical Aid, Person Responsible for Account,
						Medical History, Family Details etc using additional actions documented and included in
						./application/controllers/Clients.php from line 258 - 537 @ KaizenMed V 1.1.1

2. Added new twitter-bootstrap GroceryCRUD ui theme in ./assets/grocery_crud/themes/twitter-bootstrap
			Being used as the defato theme for displaying all records from GroceryCRUD plugin
			For add and edit functions from GroceryCRUD plugin currently using datatables theme in ./assets/grocery_crud/themes/datatables

3. Added ability to zoom into selected day agendaView when a day is clicked from monthView
			in commit 73d823707413edb1afdfa503199799be7aeaa56a
			in ./application/uiux/js/calendar.js: dayClick: function{...} 

3. Made changes to the database to accomodate new way of generating clinicID's and also presenting 
			all information from tables linked to clients table using GroceryCRUD plugin API
			Database to import ./assets/kaizenmed @ v 0.1.1.sql

THOUGHTS:
To SMS and beyond!!!

@theTechRebel

-------------------------------------------------------------------------------------------------------

28 July 2015
=
	KaizenMed V 0.1.1


RELEASE NOTE:
=
Major update
Completed Booking Module



CHANGES:
=
1. Added FullCalendar.js Plugin in commit 81fa11511520e2e2f8a8b408e363356f8e2a1aff
		FullCalendar plugin allows for the use of a fully functional Javascript calendar in your project: http://fullcalendar.io/
		Used Bower Package Manager to require the plugin into ./uiux/bower_components/fullcalendar/**/**
		The plugin depends on moment.js and jquery.
		The Fullcalendar is a javascript plugin that is embeded via the ./application/views/Require/hearder.php line 17
		The actual file with calendar call backs and logic is ./uiux/js/calendar.js
		Styling of the calendar is done using JQUery UI theme file via css file in ./uiux/css/jquery-ui-theme.min.css
		Main Uses of the calendar:
		1. Displaying appointments
		2. Click appointment to view detail about appointment
		3. Click date to zoom into week view
		4. click date and time slot to bring out appointment booking modal dialogue added in commit 6e2f4e79bb916f1917be7b0b47b7debd543fab41
		-see ./uiux/js/calendar.js comments for detailed explanation of each method & implementation

2. Completed Booking module in commit ef68f82920d52809e458dc3917708d99d5ec4d29
		Module structure:
		Booking controller - ./application/controllers/Booking.php
		Booking views 					- ./application/views/Booking/**.php
		This module handles all to do with Booking in API format.
		Since its supposed to accomodate expansion booking controller url end points take 2 arguements:
		booking/[method_to_access]/[platform_being_used] 
		Example:
		- booking/create/web means a booking is being created via web based interface
		- booking/create/app means a booking is being created via app 
		- booking/read/web means booking data is being read via web interface
		- booking/read/app means booking data is being read vai app
		The Booking controller is buil this way to accomodate more extensibility in functionality 
		-see ./application/controllers/Booking.php comments for detailed explanation of each method & implementation

3. Added GroceryCRUD Codeigniter Plugin in commit 7fca184aef2ecb928b7e1234f60ccb8ad02470ac
	A good plugin to have for General CRUD Handling http://www.grocerycrud.com/
	The plugin is accessed as a library and is autoloaded via ./application/config/autoload.php line 63
	Main Uses of the Library:
	1. ./application/contollers/Dashboard.php  public function clients(){...}
		Accesses the underlining clients database and presents it as tabular format data at /dashboard/clients/
		Handles all clients db related CRUD.
	2. -see ./application/controllers/Booking.php | public function clients{...} comments for detailed explanation of implementation

	4. Database to import ./assets/kaizenmed @ v 0.1.1.sql

THOUGHTS:
KaizenMed is coming along well, cant wait to pull data from the app!

@theTechRebel

-------------------------------------------------------------------------------------------------------

23 July 2015
=
	KaizenMed V 0.0.1


RELEASE NOTE:
=
Auth Module added to KaizenMed



CHANGES
=

1. Added ./uiux/bower_componets/, and ./uiux/uikit/ UI interface Framework UIKIT.
2. Added Auth Controller with documentation with its views generated from Auth folder in ./application/views/
3. Added ./application/models/App_model.php as boiler plate database access model.
			Bieng autoloaded in ./application/config/autoload.php line 140 and accessed in the system as $this->mydb
			See Codeigniter dcumentation Query Builder Class for the new shortcut notation for models.

THOUGHTS
=

Decoupling Views is awesome!

@theTechRebel


