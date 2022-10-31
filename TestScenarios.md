# Project Test Scenarios


## 0. As a user/seller i can login/logout/register
Feature: user/seller can either login/logout/register from the web application

### Scenario 0-A: User/Seller Logs in
Given web application loads open <br>
And the login page is visible <br>
When User/Seller enters "username" and "password" and "secret_key" <br>
Then User/Seller sees the message "welcome", "username" <br>
And the User/Seller is sent to web application home page <br>

### Scenario 0-B: User/Seller Logs out
Given the User/Seller is logged in the web application <br>
And the User/Seller is in the profile page <br>
When the User/Seller clicks on the logout button <br>
Then the User/Seller sees the message "You have been successfully logged out of the web application" <br>
And User/Seller is logged out of the web application <br>

### Scenario 0-C: User/Seller Registers
Given the web application loads open<br>
And the Login page is visible <br>
When the User/Seller Clicks on the Register here Text <br>
Then the Register page is visible <br>
When the User/Seller enters "Name", "age", "Email", "Phone", "Address".. etc <br>
Then the User/Seller sees the message "You have been successfully registered" <br>
And the User/Seller is sent to the Login page <br>


## 1. As a seller, i can add products
Feature: Add products for sale<br>
In order to sell preferred products<br>
As a seller<br>
Has to display their products<br>

### Scenario 1: Seller adds product for sale
Given the seller is logged in to the web application <br>
And the seller clicks on the add product button <br>
Then the addProduct page is visible <br>
When the seller enters "product_image", "product_name", "product_price", "product_desc" <br>
Then the seller sees the message "Your product has been successfully added!" <br>
And the seller is sent back to their profile page <br>


## 2. As a seller, I can modify products for sale
Feature: Modify listed product <br>
In order to modify a product<br>
As a seller<br>
Has to change the content of the already displayed product<br>

### Scenario 2: Seller modifies product for sale
Given the seller is logged in to the web application <br>
And the seller is on the add product page <br>
Then the seller clicks on the modify product button <br>
When the seller changes any of "product_image", "product_name", "product_price", "product_desc" <br>
The the seller sees the message "Your product has been successfully modified" <br>
And the seller is sent back to the product page <br>





### Scenario 3: Seller catogarizes products??


### Scenario 4: Seller tracks sales of products

### Scenario 5: 









