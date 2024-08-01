[![Stargazers][stars-shield]][stars-url]
[![Forks][forks-shield]][forks-url]
[![Contributors][contributors-shield]][contributors-url]


<!-- PROJECT LOGO -->
<br/>
<div align="center">
  <a href="https://github.com/AymanAbuAli/Al-Adel">
    <img src="public\images\logo.png" alt="Logo" height="150">
  </a>

<h3 align="center">UMS</h3>

  <p align="center">
    University Management System 
    <br />
    for Al-Adel University
  </p>
</div>

## Table of Contents

  <li>
    <a href="#about-the-project">About The Project</a>
    <ul>
      <li><a href="#Features">Features</a></li>
      <li><a href="#built-with">Built With</a></li>
    </ul>
  </li>
  <li>
    <a href="#getting-started">Getting Started</a>
    <ul>
      <li><a href="#prerequisites">Prerequisites</a></li>
      <li><a href="#installation">Installation</a></li>
    </ul>
  </li>
  <li><a href="#usage">Usage</a></li>
  <li><a href="#authors">Authors</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#acknowledgments">Acknowledgments</a></li>

<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

The University Management System (UMS) is a comprehensive web application developed for Al-Adel University. The system aims to enhance information accessibility, streamline communication, and facilitate engagement for students, faculty, and the community. Key functionalities include detailed university information, electronic registration, academic results access, and promotion of university events and activities.

### Features
- **University News and Events:** Stay updated with the latest news and important events.
- **College Information:** Access detailed information about colleges, available programs, curricula, and faculty members.
- **Student Services:** Inquire about grades, exam schedules, and other academic information.
- **Electronic Registration:** Seamlessly register for courses and programs online.
- **Multi-Device Compatibility:** Accessible on computers, tablets, and mobile devices.
- **Multi-Language Support:** Available in both English and Arabic.
- **Secure Login:** Students and faculty can securely log in to access personalized information.


### Built With
<table border="0" align="center">
 <tr>
    <td>

[![PHP][PHP]][PHP-url]
    </td>
    <td>

[![Laravel][Laravel.com]][Laravel-url]
    </td>
 </tr>
 <tr>
    <td>
    
[![MySQL][MySQL]][MySQL-url]
    </td>
  <td>

[![Html5][Html5]][Html5-url]
    </td>
 </tr>
    <td>

[![CSS3][CSS3]][CSS3-url]
    </td>
    <td>

[![JavaScript][JavaScript]][JavaScript-url]
    </td>
 </tr>
 <tr>
    <td>
    
[![JQuery][JQuery.com]][JQuery-url]
    </td>
    <td>

[![Bootstrap][Bootstrap.com]][Bootstrap-url]
    </td>
 </tr>
 <tr>
    <td>
    
[![git][git]][git-url]
    </td>
    <td>

[![github][github]][github-url]
    </td>
 </tr>
</table>


<!-- GETTING STARTED -->
## Getting Started

To run this locally you must download the download the Prerequisites, then follow the Installation guide.
### Prerequisites

This is the Prerequisites to run UMS locally
* #### Web Server Solution Stack
  `XAMPP`  or  `WAMP`
* #### PHP 7.4.33
* #### PHP Composer
* #### Laravel 8.75

### Installation
To set up the UMS locally, follow these steps:

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/AymanAbuAli/Al-Adel.git

    cd al-adel
    ```

2. **Install Dependencies:**
    ```bash
    composer install
    ```

3. **Configure the Database:**
    - Set up your database (e.g., MySQL, PostgreSQL).
    - Update the database configuration in `.env`.

4. **Run Migrations:**
    ```bash
    php artisan migrate
    ```

5. **Start the Server:**
    ```bash
    php artisan serve
    ```

## Usage
Once the server is running, you can access the application at `http://localhost:8000`.

### User Roles
- **Students:** Can register for courses, view grades, and access academic schedules.
- **Faculty:** Can manage course information, post grades, and communicate with students.
- **Admins:** Have full control over the system, including user management, content updates, and system settings.

## Authors
- Bilal Ali Saeed Hasil
- Asem Abdalbaset Ahmed Banafa
- Mohammed Gamal Salem Al-Haj
- Ayman Ali Hassan Salman

Supervised by Dr. Galal AL-Marzoqi

<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

We extend our gratitude to Al-Adel University and the College of Computer Science and Information Technology, Aden, for their support and resources throughout this project.



<!-- MARKDOWN LINKS & IMAGES -->
[contributors-shield]: https://img.shields.io/github/contributors/aymanabuali/al-adel.svg?style=for-the-badge
[contributors-url]: https://github.com/AymanAbuAli/Al-Adel/graphs/contributors

[forks-shield]: https://img.shields.io/github/forks/aymanabuali/al-adel.svg?style=for-the-badge
[forks-url]: https://github.com/AymanAbuAli/Al-Adel/network/members

[stars-shield]: https://img.shields.io/github/stars/aymanabuali/al-adel.svg?style=for-the-badge
[stars-url]: https://github.com/AymanAbuAli/Al-Adel/stargazers

[product-screenshot]: public/ums.png

[PHP]: https://img.shields.io/badge/php-%23777BB4.svg?&logo=php&logoColor=white&logoWidth=30&style=for-the-badge
[PHP-url]: https://www.php.net/

[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white&logoWidth=30
[Laravel-url]: https://laravel.com

[MySQL]: https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white&logoWidth=30
[MySQL-url]: https://www.mysql.com/

[Html5]: https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white
[Html5-url]: https://html.com/

[CSS3]: https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white
[CSS3-url]: https://www.w3.org/Style/CSS/

[JavaScript]: https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E
[JavaScript-url]: https://www.javascript.com/

[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com

[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 

[github]: https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white
[github-url]: https://github.com 

[git]: https://img.shields.io/badge/git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white
[git-url]: https://git-scm.com/