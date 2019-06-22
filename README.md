# Enduro

This is an **incomplete** manual lap counting application meant for use in Baja SAE endurance races. Once complete, it will be merged with https://github.com/tiagomartines11/baja-sae-brasil-online/

The goal of the app is for two or more manual _lap counters_ to input data with their devices which is then uploaded to the server, the server analyzes the data to identify potential errors (and, hopefully, fix them) and a _manager_ has access to a dedicated stream of the incoming data where he can manually fix any problems.

Data input has been implemented, but nothing else.

The db.sql file is a dump of the MySQL schema being used and includes sample data from 2 events. The tables _users, evento and equipe_ are temporary, since that information sould be pulled from the parent application's database once the merger is made.

Uses Slim and Bootstrap.