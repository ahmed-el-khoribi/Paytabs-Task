#!/bin/bash

php spark migrate       

php spark db:seed CategorySeeder    

php spark serve
