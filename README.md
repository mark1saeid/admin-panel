# Admin Panel
Laravel 8 Admin Panel with API using Jetstream, Livewire, Sanctum, and Tailwind.

1. `git clone https://github.com/mark1saeid/iptv-dashboard.git`
2. `cd laravel-news`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Set your database credentials in `.env` file
7. `php artisan migrate:fresh --seed`
8. `php artisan storage:link`
9. `npm install && npm run dev`
10. `php artisan serve`
11. Visit `localhost:8000/login` in your browser
12. Choose one `email` id from `users` table. Password is `password`.
### Screenshots

Response from API to be consumed by mobile apps etc.
![api response](https://miro.medium.com/max/3000/1*yttnGhlogAK_ZtY4sBUqMQ.png "API Response") 

Admin Dashboard - Category Managment Page
![category managment page](https://miro.medium.com/max/875/1*stzLGcvrR15TmokZZIrsRQ.png "Category Managment Page")

Admin Dashboard - Create Category
![create category](https://miro.medium.com/max/875/1*dOZ1DSehN-5SYbv9_aSh_Q.png "Create Category")

Admin Dashboard - Edit Category
![edit category](https://miro.medium.com/max/875/1*iWv3ujBXhOpIJV-NiOA-gg.png "Edit Category")

Admin Dashboard - Post Managment Page
![post managment page](https://miro.medium.com/max/678/1*4pUX8N43eYjdmenGyFJ3nA.png "Post Management Page")

Admin Dashboard - Create Post
![create post](https://miro.medium.com/max/875/1*IDLWBhGNB3KHEiYi6N1czA.png "Create Post")

Admin Dashboard - Edit Post
![edit post](https://miro.medium.com/max/875/1*5SBQT9TRSL140saVh1Hl7Q.png "Edit Post")
