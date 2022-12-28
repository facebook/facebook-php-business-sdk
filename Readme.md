
Facebook
/
facebook-php-negocios-sdk
Público
Un SDK creado para facilitar el desarrollo de aplicaciones para la API de anuncios de Facebook.

Licencia
 Ver licencia
 718 estrellas 495 tenedores 
Código
Cuestiones
Solicitudes de extracción
13
Comportamiento
Seguridad
Perspectivas
facebook/facebook-php-negocios-sdk
Última confirmación
@natewiebe13
@facebook-github-bot
natewiebe13 y facebook-github-bot
…
el mes pasado
Estadísticas de Git
archivos
LÉAME.md
SDK empresarial de Facebook para PHP
empaquetador Licencia Estado de construcción Escrutador Cobertura del escrutador

Introducción
El SDK de Facebook Business es una ventanilla única para ayudar a nuestros socios a brindar un mejor servicio a sus negocios. Los socios utilizan varias API de Facebook para satisfacer las necesidades de sus clientes. Adoptar todas estas API y mantenerlas actualizadas en las diversas plataformas puede llevar mucho tiempo y, en última instancia, ser prohibitivo. Por esta razón, Facebook ha desarrollado Business SDK que agrupa muchas de sus API en un solo SDK para facilitar la implementación y el mantenimiento. Business SDK es una versión mejorada de Marketing API SDK que incluye Marketing API, así como muchas API de Facebook de diferentes plataformas, como Pages, Business Manager, Instagram, etc.

Inicio rápido
Guía de introducción al SDK empresarial

requisitos previos
registrar una aplicación
Para comenzar con el SDK, debe tener una aplicación registrada en desarrolladores.facebook.com .

Para administrar la API de marketing, visite su Panel de aplicaciones y agregue el producto API de marketing a su aplicación.

IMPORTANTE : por seguridad, se recomienda que active 'Requerir secreto de la aplicación' en la página Configuración->Avanzado de su aplicación.

Obtenga un token de acceso
Cuando alguien se conecta con una aplicación mediante el inicio de sesión de Facebook y aprueba la solicitud de permisos, la aplicación obtiene un token de acceso que brinda acceso temporal y seguro a las API de Facebook.

Un token de acceso es una cadena opaca que identifica a un usuario, una aplicación o una página.

Por ejemplo, para acceder a la API de marketing, debe generar un token de acceso de usuario para su aplicación y solicitar el ads_managementpermiso; para acceder a la API de páginas, debe generar un token de acceso a la página para su aplicación y solicitar el manage_pagepermiso.

Consulte nuestra Guía de tokens de acceso para obtener más información.

Por ahora, podemos usar Graph Explorer para obtener un token de acceso.

Instalación
El SDK de Facebook Business requiere PHP 5.6 o superior.

Compositor
El SDK de Facebook Business usa Composer para administrar las dependencias. Visite la documentación de composer para aprender cómo instalar composer.

Agregue lo siguiente a su composer.jsonarchivo:

{
    "require": {
        "facebook/php-business-sdk": "12.0.*"
    }
}
luego instálelo a través del compositor:

php composer.phar install --no-dev
Este SDK y sus dependencias se instalarán en ./vendor.

Alternativas
Este repositorio está escrito siguiendo el estándar de carga automática psr-4 . Se puede utilizar cualquier cargador automático compatible con psr-4.

Uso
Clase principal API
El FacebookAds\Apiobjeto es la base del Business SDK que encapsula un FacebookAds\Sessiony se usa para ejecutar solicitudes contra Graph API.

Para crear una instancia de un objeto Api, necesitará un token de acceso válido:

use FacebookAds\Api;

// Initialize a new Session and instantiate an Api object
Api::init($app_id, $app_secret, $access_token);

// The Api object is now available through singleton
$api = Api::instance();
Una vez instanciado, el objeto Api le permitirá comenzar a realizar solicitudes a Graph API.

Nombres de campos
Debido a la gran cantidad de nombres de campo en los objetos existentes de Graph API, para facilitar el mantenimiento de su código, se proporcionan clases tipo enumeración. Estos archivos se almacenan en el FacebookAds/Object/Fieldsdirectorio. Puede acceder a las propiedades de los objetos de la misma manera que lo haría normalmente en php:

use FacebookAds\Object\AdAccount;

$account = new AdAccount();
$account->name = 'My account name';
echo $account->name;
o usando las enumeraciones:

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

$account = new AdAccount();
$account->{AdAccountFields::NAME} = 'My account name';
echo $account->{AdAccountFields::NAME};
Clases de objetos
Las entidades de anuncios de Facebook se definen como clases en el FacebookAds/Objectdirectorio.

Leer objetos
use FacebookAds\Object\AdAccount;

$account = (new AdAccount($account_id))->getSelf();
Para algunos objetos, la API de anuncios no devuelve todos los campos disponibles de forma predeterminada. El primer argumento del método de lectura del objeto es una matriz de nombres de campo que se solicitarán.

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

$fields = array(
  AdAccountFields::ID,
  AdAccountFields::NAME,
);

$account = (new AdAccount($account_id))->getSelf($fields);
Solicitar un número elevado de campos puede hacer que el tiempo de respuesta aumente visiblemente, siempre debes solicitar solo los campos que realmente necesitas.

Crear objetos
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdSetFields;

$account_id = 'act_123123';
$campaign_id = '123456';

$account = new AdAccount($account_id);
$adset = $account->createAdSet(
    array(),
    array(
      AdSetFields::NAME => 'My Test AdSet',
      AdSetFields::CAMPAIGN_ID => campaign_id,
      AdSetFields::DAILY_BUDGET => 150,
      AdSetFields::START_TIME => (new \DateTime("+1 week"))->format(\DateTime::ISO8601),
      AdSetFields::END_TIME => (new \DateTime("+2 week"))->format(\DateTime::ISO8601),
      AdSetFields::BILLING_EVENT => 'IMPRESSIONS',
      AdSetFields::TARGETING => array('geo_locations' => array('countries' => array('US'))),
      AdSetFields::BID_AMOUNT => '1000',
    )
);

echo $adset->id;
Actualizar objetos
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdSetFields;

$ad_set_id = '123456';

$set = new AdSet($ad_set_id);
$fields = array(
);
$params = array(
  AdSetFields::NAME => 'My new AdSet name',
);
$set->updateSelf($fields, $params);
Eliminar objetos
use FacebookAds\Object\AdSet;

$ad_set_id = '123456';

$set = new AdSet($ad_set_id);
$set->deleteSelf();
Cursores
Desde el lanzamiento de Facebook Graph API 2.0, la paginación se maneja a través de cursores . Aquí los cursores se definen como en \FacebookAds\Cursor. Los cursores generalmente se devuelven desde los métodos de conexión:

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\CampaignFields;

$account = new AdAccount('<ACT_ID>');
$cursor = $account->getCampaigns(['id','name']);

// Loop over objects
foreach ($cursor as $campaign) {
  echo $campaign->{CampaignFields::NAME}.PHP_EOL;
}

// Access objects by index
if ($cursor->count() > 0) {
  echo "The first campaign in the cursor is: ".$cursor[0]->{CampaignFields::NAME}.PHP_EOL;
}

// Fetch the next page
$cursor->fetchAfter();
// New Objects will be appended to the cursor
Obtención implícita
Siempre que se requieran todos los objetos conectados a un padre (por descuido de la cantidad de solicitudes HTTP), la obtención implícita puede ayudar a reducir la cantidad de código requerido. Si el cursor tiene habilitada la obtención implícita, al iterar (foreach, Cursor::next(), Cursor::prev()) se llega al final de la página, el SDK buscará y agregará automáticamente una nueva página, hasta que finalice el cursor. La obtención implícita le hará perder el control del número de solicitudes HTTP que se enviarán y, por este motivo, está desactivada de forma predeterminada. La obtención implícita se puede habilitar para un cursor específico:

$cursor->setUseImplicitFetch(true);
O globalmente:

use FacebookAds\Cursor;

Cursor::setDefaultUseImplicitFetch(true);
iteraciones inversas
Los cursores son bidireccionales y se pueden iterar en orden inverso:

use FacebookAds\Object\AbstractCrudObject;

/** @var \FacebookAds\Cursor $cursor */
$cursor->setUseImplicitFetch(true);

$cursor->end();
while ($cursor->valid()) {
  echo $cursor->current()->{AbstractCrudObject::FIELD_ID}.PHP_EOL;
  $cursor->prev();
}
Pruebas
La carpeta 'test' contiene los casos de prueba. Estos se dividen lógicamente en pruebas unitarias y de integración. Las pruebas de integración requieren una cuenta de anuncios de Facebook activa, una aplicación de Facebook y un token de acceso válido.

Nota: actualmente no podemos ejecutar pruebas de integración de manera segura y confiable en un sistema CI público. Nuestras integraciones con Travis y Scrutinizer (incluidas las insignias en la parte superior de este archivo) incluyen solo pruebas unitarias.

Instalar dependencias
Desde la carpeta raíz ejecute:

php composer.phar install --dev
Ejecutar solo pruebas unitarias
./vendor/bin/phpunit -c test/phpunit-travis.xml
Para ejecutar pruebas individualmente (asegúrese de no apuntar a un archivo de prueba de integración):

./vendor/bin/phpunit -c test/phpunit-travis.xml path/to/class/file
Ejecutar todas las pruebas (unidad + integración)
Configure su configuración de integración:

1 - Copie la plantilla del archivo de configuración.

cp test/config.php.dist test/config.php
2 - Edite test/config.phpcon su información.

Ejecutar:

./vendor/bin/phpunit -c test/
Para ejecutar pruebas individualmente:

./vendor/bin/phpunit -c test/ path/to/class/file
Depurar
Si este SDK no funciona como se esperaba, puede ser un problema de SDK o de API.

Esto se puede identificar construyendo una solicitud de cURL sin procesar y viendo si la respuesta es la esperada.

por ejemplo:

require __DIR__ . '/vendor/autoload.php';
use FacebookAds\Api;
use FacebookAds\Object\AdAccount;

Api::init($app_id, $app_secret, $access_token);
$api = Api::instance();

use FacebookAds\Logger\CurlLogger;
$api->setLogger(new CurlLogger());
$account = new AdAccount($account_id);
$account->read(array('id'));
Al ejecutar este código, esta solicitud cURL se imprimirá en la consola como:

curl -G \
  -d 'fields=id' \
  -d 'access_token=<access_token>' \
  https://graph.facebook.com/v3.1/<act_accountid>
SDK Codegen
Nuestro SDK se genera automáticamente a partir de SDK Codegen . Si desea obtener más información sobre cómo se genera nuestro código SDK, consulte este repositorio.

Asunto
Dado que queremos manejar los errores de manera más eficiente, hemos decidido cerrar el informe de problemas en Github y pasar a nuestro canal de informe de errores dedicado. Si encuentra un error con Business SDK (PHP), informe el problema en nuestro canal de informes de errores para desarrolladores .

Lanzamientos 31
Lanzamiento de Facebook Business PHP SDK v3.0.0
El último
el 10 de mayo de 2018
