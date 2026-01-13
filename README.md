# LearnConnect – Custom WordPress Learning Platform

LearnConnect is a **custom-built WordPress-based self-learning platform** developed as a hands-on project to demonstrate practical knowledge of WordPress core concepts, theme development, authentication flow, and content management.
This project was created as part of my **self-learning and recruitment preparation**.

## 🚀 Project Overview

LearnConnect provides a structured platform where users can:

* Register and log in
* View and manage their profile
* Read and publish articles
* Access restricted content (Feed) after authentication

The project focuses on **clean architecture, real-world logic, and WordPress best practices**, rather than using pre-built themes or page builders.


## ✨ Key Features

* 🔐 **User Authentication**

  * User registration and login
  * Restricted access to Feed for non-logged-in users

* 👤 **User Profile Page**

  * Displays user profile picture
  * Shows username
  * Displays number of articles published by the user

* 📰 **Feed Section**

  * Visible only to logged-in users
  * Non-logged-in users see a login/signup prompt

* 📄 **Custom Pages**

  * Home
  * About
  * Contact (with admin notification form)
  * Feed
  * Profile

* 🎨 **Custom UI**

  * Custom header and footer
  * Fixed footer across all pages
  * Circular profile image with centered alignment

* 🧩 **WordPress Fundamentals**

  * Custom theme development
  * Template hierarchy usage
  * WordPress hooks and APIs
  * Dynamic content rendering

## 🛠️ Tech Stack

* **Frontend:**
  HTML, CSS

* **Backend:**
  PHP (WordPress)

* **Database:**
  MySQL

* **CMS:**
  WordPress

* **Version Control:**
  Git & GitHub

* **Local Development:**
  LocalWP

## 📂 Project Structure

```
wp-content/
 └── themes/
     └── learnconnect/
         ├── header.php
         ├── footer.php
         ├── functions.php
         ├── index.php
         ├── page-feed.php
         ├── page-profile.php
         ├── style.css
```


## 🔐 Authentication Logic

* Users can access **Home, About, Contact** without login
* **Feed page** is restricted:

  * If user is not logged in → login/signup prompt
  * If logged in → feed content displayed

This ensures controlled access and a real-world authentication flow.



## 🧪 How to Run Locally

1. Install **LocalWP**
2. Create a new WordPress site
3. Replace the theme folder with `learnconnect`
4. Activate the theme from WordPress Admin
5. Ensure user registration is enabled:

   ```
   Settings → General → Anyone can register
   ```

## 📸 Screenshots 


* Home Page
* Login / Signup
* Profile Page
* Feed Page (Logged-in vs Logged-out)

## 🎯 Learning Outcomes

* Strong understanding of WordPress theme development
* Practical experience with authentication logic
* Real-world page restriction handling
* Git-based project management
* Clean and scalable project structure

## 👨‍💻 Author

**Dhanush R**
Final Year Student | Full Stack Developer
Skilled in HTML, CSS, JavaScript, React.js, Python & WordPress

## 📌 Note

This project was developed **from scratch** for learning and recruitment purposes and does not rely on pre-built themes or page builders.


Just tell me 👌
