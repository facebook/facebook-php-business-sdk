# Aggregator BM Onboarding Example

This is a very basic demo to demonstrate a simple flow of creating a Child Business Manager for a client. After creating the Child Business Manager, the client can set up a Click-to-Messenger ad.


## Set Up

1. Replace the constants in the top of the file in `api.php`. Also be sure to replace the constants `<YOUR-IMAGE-PATH>`, `<YOUR-LINK>`.
2. Replace `<YOUR-APP-ID>` in `index.html`.
3. Run the following command to start up your local server:
`php -S localhost:8000`
4. Go to https://localhost:8000
5. Click on the Facebook Login Button, this should automatically create the child business manager if it doesn't exist and get the required information necessary to create an ad.
6. Set the fields and click create ad!

Note: the user creating the ad must be an admin of the page referenced in `page_id` in `api.php`.
