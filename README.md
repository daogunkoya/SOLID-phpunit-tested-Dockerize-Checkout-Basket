# SOLID-phpunit-tested-Dockerize-Checkout-Basket
- This shows simple implementation for a checkout basket
- This basket accepts one item at a time and there are currently 4 product 
- Every user has got length of time and minimum of 12 can be given discount
- A user basket can be discounted with minimum of length of 12: this is within each - - user row record and is evaluated

This implementation uses interface and dependency injection. Ensuring single  behavior is handle independently

#Docker
Docker orchestrate our infrastructure
This implementation can be run with docker install in your machine. 
compose and docker file is used here at the root to define image and containerization

    run docker composer build ( build the image )

    run docker composer up  ( create a container )

    docker compose run  php  ./vendor/bin/phpunit --verbose tests/BasketTest.php
     ( run test in the container )
