# SMS API - Version 1.0

This is the official **SMS API** sample provided by [Full Stack Team Six](https://fullstackteamsix.com/) to makes it easy for developers to integrate our API in their code.

Jump To:
* [Getting Started](#Getting-Started)
* [Quick Examples](#Quick-Examples)
* [Getting Help](#Getting-Help)
* [Features](#Features) 
* [More Resources](#Resources) 

## Getting Started

1. **Create an Account** – Before you begin, you need to
   sign up and register your SENDER name.
 

## Quick Examples

### Sending an SMS using PHP

```php
$phone = "Enter the recipient phone number";
$msg = "Enter your message here";
$apiKey = "Enter your API Key";


// API URL
$url = 'https://portal.fullstackteamsix.com/api/v1/send/';

// Create a new cURL resource
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "phone=" . $phone . "&message=" . $msg . "&key=" . $apiKey . "");

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$server_output = curl_exec($ch);

// Close cURL resource
curl_close($ch);

echo $server_output;
```

## Getting Help

Please use these community resources for getting help. We use the GitHub issues for tracking bugs and feature requests and have limited bandwidth to address them.
For general issues regarding the SMS services and their limitations, you may also take a look at the [Documentation](https://fullstackteamsix.com/docs).


### Opening Issues

If you encounter a bug with our `API` we would like to hear about it. You can contact us through [here](https://fullstackteamsix.com/contacts.html).

## Features

* Send Automated SMS via API
 
## Reach out on social media

* [Twitter](www.twitter.com/fullstackteam6) – Follow us on Twitter 
* [Facebook](https://web.facebook.com/fullstackteamsix/) – Follow us on Facebook 
* [Instagram](https://www.instagram.com/full_stack_team_six/) – Follow us on Instagram 
* [LinkedIn](https://www.linkedin.com/company/full-stack-team-six) – Follow us on LinkedIn 
