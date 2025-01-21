\# Laravel Project

\## Overview This is a Laravel-based project designed to manage tasks
with functionalities like creating, editing, deleting, and listing
tasks. It features a user-friendly interface built using Tailwind CSS
and integrates modern development practices for scalability and
maintainability.

\-\--

\## Prerequisites Before running this project, ensure you have the
following installed:

1\. \*\*PHP\*\* (Version 8.x or higher) 2. \*\*Composer\*\* 3.
\*\*Node.js\*\* and \*\*npm\*\* 4. \*\*MySQL\*\* or your preferred
database system

\-\--

\## Installation Steps 1. \*\*Clone the repository:\*\* \`\`\`bash git
clone \<repository-url\> \`\`\`

2\. \*\*Navigate to the project directory:\*\* \`\`\`bash cd
\<project-folder\> \`\`\`

3\. \*\*Install PHP dependencies:\*\* \`\`\`bash composer install \`\`\`

4\. \*\*Install Node.js dependencies:\*\* \`\`\`bash npm install \`\`\`

5\. \*\*Set up the environment file:\*\* Copy \`.env.example\` to
\`.env\` and update the following settings to match your environment:
\`\`\`env DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306
DB_DATABASE=\<your-database-name\>
DB_USERNAME=\<your-database-username\>
DB_PASSWORD=\<your-database-password\> \`\`\`

6\. \*\*Generate the application key:\*\* \`\`\`bash php artisan
key:generate \`\`\`

7\. \*\*Run database migrations:\*\* \`\`\`bash php artisan migrate
\`\`\`

\-\--

\## Running the Project

1\. \*\*Run the development server:\*\* \`\`\`bash php artisan serve
\`\`\`

2\. \*\*Compile the assets:\*\* \`\`\`bash npm run dev \`\`\`

Access the project at \`http://127.0.0.1:8000\` in your web browser.

\-\--

\## Features - \*\*Task Management:\*\* Create, edit, and delete tasks
with ease. - \*\*Pagination:\*\* Paginated task listing for better user
experience. - \*\*Responsive Design:\*\* Fully responsive interface
using Tailwind CSS.

\-\--

\## Common Commands \### Development Commands 1. \*\*Run the Laravel
development server:\*\* \`\`\`bash php artisan serve \`\`\`

2\. \*\*Compile assets using Vite:\*\* \`\`\`bash npm run dev \`\`\`

\### Database Commands 1. \*\*Run migrations:\*\* \`\`\`bash php artisan
migrate \`\`\`

2\. \*\*Rollback migrations:\*\* \`\`\`bash php artisan migrate:rollback
\`\`\`

\-\--

\## Notes for the Future - If you encounter issues with dependencies,
run the following commands to clear caches: \`\`\`bash php artisan
config:clear php artisan cache:clear composer dump-autoload \`\`\`

\- Remember to install dependencies again after a long break: \`\`\`bash
composer install npm install \`\`\`

\-\--

\## License This project is licensed under the \[MIT
License\](https://opensource.org/licenses/MIT).
