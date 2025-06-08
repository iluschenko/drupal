# Drupal Custom Block Project

This project demonstrates a custom Drupal module with a block, custom theme, and CI/CD pipeline.

## Project Structure

- `web/modules/custom/custom_block/` - Custom block module
- `web/themes/custom/custom_theme/` - Custom theme
- `.github/workflows/` - CI/CD configuration

## Features

- Custom block with greeting message
- Interactive button with JavaScript functionality
- Custom theme with responsive design
- Unit tests
- CI/CD pipeline with:
  - Code linting (PHPCS)
  - Unit testing (PHPUnit)
  - Code coverage reporting
  - Build artifact generation

## Setup

1. Clone the repository
2. Run `composer install`
3. Add the following entries to your hosts file (`/etc/hosts`):
   ```
   127.0.0.1 drupal.localhost
   127.0.0.1 nginx.localhost
   ```
4. Start the Docker containers:
   ```bash
   docker-compose up -d
   ```
5. Access the services:
   - Drupal: http://drupal.localhost
   - Nginx: http://nginx.localhost
   - Traefik Dashboard: http://localhost:8080
6. Install Drupal using the web interface
7. Enable the custom block module and theme

## Development

- The custom block module is located in `web/modules/custom/custom_block/`
- The custom theme is in `web/themes/custom/custom_theme/`
- Run tests with:
  ```bash
  ./vendor/bin/phpunit web/modules/custom/custom_block/tests
  ```

## Local Development with Traefik

The project uses Traefik as a reverse proxy for local development. This allows you to:
- Access services using custom domains (drupal.localhost, nginx.localhost)
- View the Traefik dashboard at http://localhost:8080
- Automatically handle routing between services

## CI/CD Pipeline

The project uses GitHub Actions for CI/CD. The pipeline includes:

1. Code linting with PHPCS
2. Unit testing with PHPUnit
3. Code coverage reporting
4. Build artifact generation

The pipeline runs on:
- Push to main branch
- Pull requests to main branch

## License

This project is licensed under the GPL-2.0-or-later license. 