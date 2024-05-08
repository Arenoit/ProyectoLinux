# Proyecto docker-compose 😃
Página Web que esta diseñada en Linux, uso de Docker | Back-end | Aunque tiene un diseño leve, lo importante es el uso y el mantenimiento de el código PHP

Autor: David Jiménez

## 👯 Contenido
Sistema que esta hecho como proyecto Back-end, no esta parcheado vulnerabilidades por Pentesting
- Base de datos básica
- Uso de Framework Datatables para presentar datos iterativos.
- Login básico que no contiene una interfaz nuy desarrollada.
- Contiene registros de usuarios de leve calidad
- Este proyecto fue diseñado solo con el proposito de entender el uso de las dependencias de Docker

## 🧐 Detalles
Es un proyecto básico que usa docker-compose, diseñado para el uso de ependencias SQL y PHP.

## ⚡ Tecnologías
Talk to me about
- Front-end **CSS, Javascript**
- Back-end **PHP**
- Se puede usar openssh-server

## 💬 Código - Indicaciones
Usar el comando para que se ejecute el proyectoy funcione
-> docker-compose up -d
Opcional editar la información del network almenos que definamos nuestra propia IP al usar considerar el utiliza identación de 2 espacios
Ruta del DHCP para cambiar en la Virtual Machine el IPv4
/etc/netplan/00-installer-config.yaml

-----------------------------------------
    network:
      version: 2
      renderer: networkd
      etherets:
        enp0s3:
          dhcp4: true
        enp0s8:
          dhcp4: false
          addresses: [192.168.10.10/24]
-----------------------------------------
En el caso que esten utilizando un máquina virtual es importante que la red deba ser un adaptador puente para que exista un PIN externo en muchos de los casos es el enp0s8 conocida como la IP de maáquina, en el caso que esten en Linux directo la IP no varia 127.0.0.1.
---
⭐️ Nota
Es dificil encontrar código de Docker que funcione con SQL ya que la mayoria de Bases de Datos en Docker son en MongoDB y generalmente implementadas con NodeJS
