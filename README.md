# Last On Earth(Game) Inventory Manager Backend
This project it's created to provide a backend for inventory management of Last Day on Earth Game.
It's a problem, because you waste all your time trying to know how much resources has or need. 
This backend provides some features to manage inventory.

>Note: This tool is not official Kefir Software integration. This project doesn't use any Kefir API. This tools is developed as my own project.
## How to run this project
If you want Demo version of this system, consider project environment to run:

1. Use php version 8.2.26.
2. Use composer version 2.7.9.
3. Use MySQL8 as Database Engine

To setup this project, follow next steps: 
1. Clone this project using this command
```console
git clone https://github.com/dapacheco1/ldoe-inventory-manager-backend.git
```
2. Create a .env file, using .env.example as template, because you find there all app configuration variables.
3. Create a database at MySQL and fill database variables with your own values.
4. If you are using tools like Homestead, it's important to configure app variables.
5. Execute the next commands:
```console
php artisan migrate
```
```console
php artisan db:seed
```
## Features
### For sysadmin
- API Documentation for manage system
- Endpoints allows to fill and modify all tables via API REST.
### For all users
- Create and modify one or more inventories in case you have multiple accounts.
- Create a threshold and launch notifications which items are low. For Now use ABC Classification
## TO DO:
- [ ] Relationship between resources and locations to allow users to display where.
- [ ] Allow users to register inventory variations from a daily transactions.
- [ ] Implements Reorder Point(ROP) formula for inventory.