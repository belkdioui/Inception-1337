# Inception 1337

Welcome to the repository for the "Inception" project completed as part of the curriculum at School 1337. This project aims to set up a Docker-based infrastructure with NGINX, WordPress, and MariaDB, adhering to specific guidelines and best practices.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
- [Project Structure](#project-structure)
- [Configuration](#configuration)
- [Security Considerations](#security-considerations)

## Overview

Project Inception requires setting up several Docker containers each serving a specific role:
- **NGINX**: Acts as the main entry point with TLSv1.2/1.3 support.
- **WordPress**: Configured with php-fpm and separated volumes for database and website files.
- **MariaDB**: Provides the database backend for WordPress.

## Features

- Docker-based infrastructure using Docker Compose.
- Secure setup with TLSv1.2/1.3 only for NGINX.
- Separate volumes for database and website files.
- Environment variables management using `.env` files.
- Automated setup using Makefile for Docker commands.

## Technologies Used

- Docker
- Docker Compose
- NGINX
- WordPress
- MariaDB
- Alpine Linux or Debian
- TLSv1.2/1.3

## Setup Instructions

### Prerequisites

- Ensure Docker and Docker Compose are installed on your system.

### Clone Repository

```bash
git clone git@github.com:belkdioui-111/Inception_1337.git
cd Inception_1337
```

## Environment Setup

1. Create a `.env` file in the `srcs/` directory with the following content:
   ```
   DOMAIN_NAME=your-login.42.fr
   MYSQL_USER=username
   MYSQL_PASSWORD=password
   MYSQL_ROOT_PASSWORD=rootpassword
   ```
2. Replace your-login.42.fr with your actual School 42 login.
3. Replace username, password, and rootpassword with your desired database credentials.

### Build and Run

1. **Build Docker images and start containers:**
   ```bash
   make build
   make up
   ```
2. **Access the Services:**

Once the Docker containers are up and running, you can access the services as follows:

- **NGINX**: Open your web browser and navigate to `https://your-login.42.fr`.
- **WordPress**: Open your web browser and navigate to `https://your-login.42.fr/wordpress`.
- **MariaDB**: Connect to the MariaDB database using a database client or command-line tool with the following details:
  - Host: `mariadb`
  - User: (as specified in the `.env` file, e.g., `MYSQL_USER`)
  - Password: (as specified in the `.env` file, e.g., `MYSQL_PASSWORD`)
  - Database: (as specified in your setup)

Replace `your-login` with your actual School 42 login.


## Project Structure

The project structure is organized as follows:
<img width="497" alt="Screen Shot 2024-07-11 at 9 01 57 AM" src="https://github.com/belkdioui-111/inception/assets/76043881/19a91391-6870-4d30-a981-ea252d3f6a84">

## Configuration
- NGINX: Configured to serve HTTPS traffic only with TLSv1.2/1.3.
- WordPress: Configured with php-fpm and volumes for database and files.
- MariaDB: Provides the database backend for WordPress.

## Security Considerations
- Avoid hardcoding passwords or sensitive data in Dockerfiles or version control.
- Use .gitignore to exclude sensitive files like .env and secrets/.
- Implement Docker security best practices for containers and networks.
