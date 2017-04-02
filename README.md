This code is no longer being maintained.

# Kirby-Mailchimpselect
A select field for kirby cms that lists your mailchimp lists in a select field

How to use :

1) Unzip the files into fields/mailchimpselect directory 

2) In your config.php add 

c::set('mailchimpAPI', "Your Mailchimp Key");

3) In your blueprint file add the next lines

    fields:
      mailchimplist:
        label: Mail Chimp List
        type: mailchimpselect
      
Then you will have the list of all the mailchimp lists available to you.

The select field will show the names of the lists and will return their ID so they can be used with the mailchimp php api (I used this in the code https://bitbucket.org/mailchimp/mailchimp-api-php/downloads)
