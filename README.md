# Staff Directory Application

A professional, modular WordPress-based staff directory. This application separates data logic from presentation using a custom-built plugin and a dedicated theme, deployed via a GitHub-to-Hostinger CI/CD pipeline.

## 🌐 Live Demo
You can view the live, fully functional version of this application here:  
https://saurangzeb.com (may show wordpress default page, copy paste link to url to fix)

---

## 🚀 Key Features
- **Custom Post Type (CPT):** Dedicated 'Staff' entity to keep business data separate from standard blog posts.
- **Custom Taxonomy:** 'Departments' categorization for scalable data organization and filtering.
- **Schema Management:** Integrated with Advanced Custom Fields (ACF) for structured data (Job Titles, Email Addresses).
- **Decoupled Architecture:** - **Plugin:** Handles core functionality, data structures, and hooks.
  - **Theme:** Handles UI/UX and responsive grid layouts.
- **CI/CD Pipeline:** Automated deployment from GitHub to Hostinger via Webhooks.

## 🛠️ Tech Stack
- **CMS:** WordPress
- **Language:** PHP, CSS3, HTML5
- **Data:** Advanced Custom Fields (ACF), MySQL
- **DevOps:** Git, GitHub Desktop, Hostinger hPanel, Webhooks

## 📁 Repository Structure
- `/plugins/my-staff-directory`: Contains the logic for registering CPTs and Taxonomies.
- `/themes/staff-directory-app`: Contains the template files (`archive-staff.php`, `single-staff.php`, `style.css`).

## 🔧 Installation & Setup
1. **Plugin Activation:** Activate the `my-staff-logic` plugin to register the 'Staff' post type.
2. **Theme Activation:** Activate the `staff-directory-app` theme.
3. **Data Import:** Import the ACF JSON field group (included in the `/acf-json/` folder).
4. **Permalinks:** Navigate to **Settings > Permalinks** and click **Save Changes** to flush rewrite rules.

## 💡 Architecture Decisions
For this project, I chose to register the **Custom Post Types** within a functionality plugin rather than the theme's `functions.php`. 

This follows WordPress best practices for **Data Persistence**: 
- It ensures that if the theme is changed or updated in the future, the staff data and database relationships remain intact and accessible.
- It keeps the codebase "DRY" (Don't Repeat Yourself) and separates the "What" (Data) from the "How" (Design).

## 🔄 Deployment Workflow
Instead of traditional FTP, this project uses a modern **Git-flow**:
1. Local development and testing.
2. Version control via GitHub.
3. Automatic deployment to the live Hostinger server via a configured **Webhook listener**.
