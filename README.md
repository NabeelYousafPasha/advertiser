<p align="center">
    <a href="https://www.upwork.com/freelancers/~01f18b2d600d89b4d8" 
    target="_blank">
        <img src="https://avatars.githubusercontent.com/u/46818315?v=4" width="200">
    </a>
</p>



## Upwork Project - Advertiser Task 

Use Laravel framework to get the job done. The only constraint is that your application needs to run on our local machine (see below how we will run your code).

TASKS - Your code needs to fulfil the following requirements:
1. Implement an API endpoint that returns a JSON response that contains a list of
   hotel rooms (cheapest to most expensive).
2. Filter the results in such a way that you never show the exact same room more
   than once. (For example, both APIs offer information regarding ‘Hotel B’ with room
   code ‘DBL-RM’ and thus should only be shown 1 time with the lowest price in the final listing)
3. Make the code easily extensible to new advertisers (APIs).
4. Provide unit and/or integration tests for your code.

Note: 
- Your code should be reliable in case the API is down.
- (Dockerize the application.) if possible
- Your code will include OOP implementation, including interfaces and design patterns. Namespaces, closures, and anonymous functions.

## Codebase

- Wrote a console command to sync and update database, instead of HTTP / CURL call to EP (end points) in order to address point:
    - Your code should be reliable in case the API is down.
    - App\Console\Commands\SyncAdvertisersDataCommand


- Implemented several Interfaces to each Advertiser Services in order to address:
    - Make the code easily extensible to new advertisers (APIs). 
    
    
    App\Interfaces\{
        AdvertiserInterface, HotelInterface
        RoomInterface, TaxableInterface
    }

## How to Run

### Migrate

    php artisan migrate

### Seed
    php artisan db:seed

### Console Command 
    php artisan advertiser:sync-advertisers-data

### Tests
    vendor/bin/phpunit

    vendor/bin/phpunit tests/Unit/Console/SyncAdvertisersDataCommandTest.php  --stop-on-error
    vendor/bin/phpunit tests/tests/Unit/RoomFilterTest.php
    vendor/bin/phpunit tests/tests/Unit/AdvertiserTest.php.php

## EP (End Points)

### Web

- /
- health-check
- ping

### APIs

- /api/advertisers
- /api/hotels
- /api/rooms
    - Query Parameters to perfom SORT, FILTER: 
        - optional query params: hotel_id, sort_column, sort_order
        - hotel_id: valid hotel id
        - sort_column: net_price, tax_price, total_price
        - sort_order: asc, desc
    
    - default: /api/rooms?sort_column=total_price&sort_order=asc

## Contact Me

- **[Gmail: nabeelyousafpasha@gmail.com](nabeelyousafpasha@gmail.com)**
- **[Github: https://github.com/NabeelYousafPasha](https://github.com/NabeelYousafPasha)**
- **[Upwork: https://www.upwork.com/freelancers/~01f18b2d600d89b4d8](https://www.upwork.com/freelancers/~01f18b2d600d89b4d8)**
- **[Phone / WhatsApp: +92 321 5031089](03215031089)**
- **[LinkedIn: https://pk.linkedin.com/in/nabeelyousafpasha](https://pk.linkedin.com/in/nabeelyousafpasha)**
- **[Twitter: https://twitter.com/nabeelusafpasha](https://twitter.com/nabeelusafpasha)**
