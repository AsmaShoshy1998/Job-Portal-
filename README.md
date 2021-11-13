## Laravel Job Portal API with Auth
Basic Laravel CRUD API application included with Authentication Module & Job Module. It's included with Sanctum and RestAPI format.

----

### Language & Framework Used:
1. PHP
1. Laravel

### Architecture Used:
1. Interface-Repository Pattern
1. Model Based Eloquent Query
1. Sanctum API Token Authentication- https://laravel.com/docs/8.x/sanctum

### API List:
##### Authentication Module
1. [x] Register User API with Token
1. [x] Login API with Token
1. [x] Authenticated User Profile
1. [x] Refresh Data
1. [x] Logout

##### Job Module
1. [x] Job List
1. [x] Create Job Post
1. [x] Edit Job Post
1. [x] View Job Post
1. [x] Delete Job Post

### How to Run:
1. Clone Project - 

```bash
git clone https://github.com/AsmaShoshy1998/Job-Portal-
```
2. Go to the project drectory by `cd Riseup_Labs` & Run the 
2. Create `.env` file & Copy `.env.example` file to `.env` file
3. Create a database called - `riseup_labs`.
4. Now migrate and seed database to complete whole project setup by running this-
``` bash
php artisan migrate:refresh --seed
```
5. Run the server - 
``` bash
php artisan serve
```



### Test
1. Test with Postman - https://www.getpostman.com/collections/df5e3011cd39bc5cd75d [Click to open with post man]

### Procedure
1. First Login with the given credential or any other user credential
1. Set bearer token to Post Header as Authentication
1. Hit Any API, You can also hit any API, before authorization header data set to see the effects.

