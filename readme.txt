	*Project Weeb Shop

**How to start:
	- open db.php via url (/Project-Weeb_Shop/db.php)
	- back to index.php
	- use Login data to login (see at bottom)
	- to index.php:
		-- page uses overlay of shop
		-- no interaction outside of login & products select
		-- no ordering option, login to buy
	- shop page:
		-- same overlay as index.php
		-- welcome message to user top left (with email)
		-- shopping cart icon top right
		-- product cards select now fills cart
		-- click on shopping cart open sidebar with product list
		-- close sidebar via button top left
		-- total calculates sum of products
		-- to sidebar: 
				--- "Cancel" empties cart & closes sidebar
				--- "Checkout" disabled as long as no product is in cart
				--- "Checkout" opens checkout form
	- checkout form:
		-- normal form to fill out
		-- filled out form information is stored in "$_SESSION"
		-- "cancel order" empties form and returns to shop
		-- "complete order" closes form overlay and opens "order" overlay
		-- to "order" overlay:
				--- order messsage of successful ordering
				--- list of ordered products & total price (stored in "sessionStorage" when put in cart)
				--- form information for address
				--- "back to shop" empties "sessionStorage" & returns to shop


**Known issues or nice to have:
	- no new user form option
	- only 3 products & only Mangas (Navigation contains dead links)
	- no single delete of products in cart		



Login Data:

Email_1: hello@gmail.com
Password_1: pw

Email_2:  weeb@gmx.de
Password: password

Email_3: ayaya@yahoo.net
Password: mypassword

	