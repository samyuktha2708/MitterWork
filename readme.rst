Question No 6

Create an interesting display of public services available by zip code, city, and/or street address using http://seeclickfix.com/open311/v2/docs. Assume that most users would not know their town’s latitude and longitude; so, some additional look-ups would be required.

How to run this site

Step 1: Install WAMP Server from http://www.wampserver.com/en/

Step 2: Configure and start the server

Step 3: Clone the code from Git or download the repository from GitHub

Step 4: After downloading repository, extract the files and place them in the wamp/www/ folder. Now the path will bewampp/www/MitterWork

Step 5: Now type the url localhost/MitterWork

Step 6: Now you will be redirected to homepage of the site, where you need to enter the zip code or city or street name in the text field and hit submit and you will be redirected to the next page where you will see the list of nearest public services in a table

Details about developing the site

The site returns services based on latitude it uses to APIs to complete this task

1.	Google API

2.	SeeclickFix (https://seeclickfix.com)

The site uses two frameworks to build

1.	Codeigniter

2.	Bootstrap (CSS framework)

The site uses the following technologies

1.	PHP

2.	HTML

3.	CSS

4.	AJAX

5.	JSON

How the site works

The site uses two API to do the task first is Google API that returns the latitude and longitude of the address, city ,country or zip and based on the latitude and longitude we get the result form another API SEEclickFix. The seeclickfix returns JSON result format from which we parsed it into array and show the result in a bootstrap table. The site uses PHP language framework named codeigniter.
Once you write the address in the text area and hit submit it returns you with bunch of services within the area in a bootstrap table.

