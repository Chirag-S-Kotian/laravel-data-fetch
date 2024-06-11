   ```markdown
   # Times of India Articles

   This project fetches data from the Times of India RSS feed and displays it in a data table with searching, sorting, and pagination features.

   ## Installation

   Follow these steps to set up the project:

   1. Clone the repository:
      ```bash
      git clone https://github.com/Chirag-S-Kotian/laravel-data-fetch.git
      cd times-of-india
      ```

   2. Install Composer dependencies:
      ```bash
      composer install
      ```

   3. Install NPM dependencies:
      ```bash
      npm install && npm run dev
      ```

   4. Create and configure your `.env` file:
      ```bash
      cp .env.example .env
      php artisan key:generate
      ```

   5. Serve the application:
      ```bash
      php artisan serve
      ```

   6. Open your browser and go to `http://localhost:8000`.

   ## Packages Used

   - Laravel: ^9.0
   - yajra/laravel-datatables-oracle: ^10.0
   - jQuery: ^3.6.0
   - DataTables: ^1.11.3
   - Vite: ^2.0

### Final Steps:

1. **Run the Laravel Development Server**:
   ```bash
   php artisan serve
   ```

2. **Open Your Browser**:
   Go to `http://localhost:8000` to see the data table in action.
