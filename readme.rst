Question No 6: Create an interesting display of public services available by zipcode, city, and/or street address using http://seeclickfix.com/open311/v2/docs. Assume that most users would not know their town’s latitude and longitude; so, some additional look-ups would be required.

How to run this site

Step 1 : Install WAMP Server from http://www.wampserver.com/en/ 

Step 2 : Configure and start the server 

Step 3 : Clone the code from git or download the repository from git

Step 4 : After downloading repository, etract the files and place them in the wamp/www/ folde.Now the path will be wampp/www/MitterWork

Step 5 : Now type the url localhost/MitterWork

Step 6 : Now you will be redirected to homepage of the site, where you need to enter the zip code or city or street name in the text field and hit submit and you will be redirected to the next page where you will see the list of nearest public services in a table

Deatils about developing the site

The site returns services based on lattitude it uses to APIs to complete this task 

1. Google Api 

2. SeeclickFix (https://seeclickfix.com)

The sites uses two frameworks to bulid

1. Codeigniter 

2. Bootstrap (css framework)

The site uses the following technologies
1. PHP 

2. HTML

3. CSS

4. AJAX

5. JSON

How the site work  

The site uses two api to do the task first is Google api that returns the lattitude and longitude of the address , city ,country or zip and based on tha lattitude and longitude we get the result form another api SEEclickFix.The seeclickfix returns json result format from which we parsed it into array and show the result in a bootsrap table.The site uses php language framework named codeigniter

Once you write the address in the text area and hit submit it returns you with bunch of services within the area in a bootstrap table. 
