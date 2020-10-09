@servers(['dev' => 'b12@206.81.13.7','localhost' => '127.0.0.1'])

@setup
    require __DIR__.'/vendor/autoload.php'; 
    (new \Dotenv\Dotenv(__DIR__, '.env'))->load();
    $now = new DateTime();
    $date = $now->format('Y-m-d H:i:s');
    $slack_hook_url = env('LOG_SLACK_WEBHOOK_URL');
@endsetup

@task('deploy-development', ['on' => 'dev'])

  echo "------- Iniciando Deploy -------"; 
  cd /var/www/deploy/uvertrac/sistema-web/backend
  php artisan down
  echo "---- [INFO] [Backend] Haciendo pull al branch development ----";
  git pull origin development
  echo "---- [INFO] Corriendo las migraciones ----";
  php artisan migrate --force
  cd /var/www/deploy/uvertrac/sistema-web/frontend
  echo "---- [INFO] [Frontend] Haciendo pull al branch master ----";
  git pull origin master
  echo "---- [INFO] Haciendo build del Frontend (npm run build) ----";
  npm install
  npm run build
  cd /var/www/deploy/uvertrac/sistema-web/backend
  php artisan up

@endtask

@task('deploy-local', ['on' => 'localhost'])

  echo "------- Iniciando Deploy -------"; 
  cd /var/www/deploy/uvertrac/sistema-web/backend
  php artisan down
  echo "---- [INFO] [Backend] Haciendo pull al branch development ----";
  git pull origin development
  echo "---- [INFO] Corriendo las migraciones ----";
  php artisan migrate --force
  cd /var/www/deploy/uvertrac/sistema-web/frontend
  echo "---- [INFO] [Frontend] Haciendo pull al branch master ----";
  git pull origin master
  echo "---- [INFO] Haciendo build del Frontend (npm run build) ----";
  npm install
  npm run build
  cd /var/www/deploy/uvertrac/sistema-web/backend
  php artisan up
   
@endtask

@finished
  echo "-- Enviando Notificacion a Slack [channel: Uvertrac] --->>>";
  @slack($slack_hook_url, '#uvertrac', "Deploy en servidor de DEVELOPMENT [206.81.13.7] a las [$date]")
  echo " [Notificacion Enviada] ";
@endfinished
 