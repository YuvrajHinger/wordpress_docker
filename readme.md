# WordPress Docker Setup

Follow these steps to set up your WordPress environment using Docker.

## Commands

1. **Create and navigate to project directory**
    ```sh
    mkdir wordpress_docker
    cd wordpress_docker
    ```

2. **Initialize Git repository**
    ```sh
    git init
    git remote add origin https://github.com/YuvrajHinger/wordpress_docker.git
    git pull origin main
    ```

3. **Download and extract WordPress**
    ```sh
    wget https://wordpress.org/latest.tar.gz
    tar -xzvf latest.tar.gz
    ```

4. **Add WordPress source code to Git**
    ```sh
    git add .
    git commit -m "git repo setup with initial wordpress source code"
    git push origin main
    ```

5. **Start Docker Compose**
    ```sh
    docker compose up -d
    ```
    If you encounter an invalid character token error:
    - Convert tabs to spaces in the `docker-compose.yml` file.
    - Then, commit the fix:
    ```sh
    git commit -am "bug-fix: yml throwing error found character that cannot start any token"
    ```

6. **Run Docker Compose again**
    ```sh
    docker compose up -d
    ```
    Access the setup at `http://localhost/` to see the "Welcome to nginx!" page.

7. **Configure nginx for WordPress routing**
    - Add the nginx configuration file for routing the directory to WordPress files.
    - Then, commit and push the configuration:
    ```sh
    git add nginx/default.conf
    git commit -am "nginx conf file for routing directory to wordpress files"
    git push origin main
    ```

8. **Restart Docker Compose**
    ```sh
    docker compose down
    docker compose up -d
    ```

9. **Configure MySQL mount to avoid data loss**
    - Update the `docker-compose.yml` file to include MySQL data mount.
    - Then, commit and push the changes:
    ```sh
    git add docker-compose.yml
    git commit -am "mysql mount to avoid data-loss on every restart of container"
    git push origin main
    ```

10. **Fix YAML script issues**
    - Commit any additional fixes for YAML script tab issues:
    ```sh
    git commit -am "FIX: TABS ISSUE FOR YML SCRIPT"
    git push origin main
    ```
