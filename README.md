# ansible-wordpress
Instalación de WordPress mediante Ansible Esta instalación de Wordpress fué realizada mediante Ansible.

Se crearon dos Máquinas Virtuales, usando Vagrant y VirtualBox una con IP 192.168.33.10 que es el Servidor
en donde se Instaló Ansible y el otro es Nodo 1 con IP 192.168.33.11 donde se instaló WordPress, se comparte
el puerto 80 entre Nodo1 y el Host de Vagrant para acceder a WordPress solo con localhost sin especificar
Puerto.

Se puede visualizar el Blog solo con la URL localhost, si se quiere aprovechar todas las funcionalidades
de WordPress se debe hacer login a la URL localhost/wp-login.php usuario admin clave admin.

Elaborado por Eric Garcia
