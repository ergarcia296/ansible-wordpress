Vagrant.configure("2") do |config|
 
  # Creación de Dos Máquinas Virtuales Confuguración común para Ambas
  config.vm.box = "ubuntu/bionic64"
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "1024"
  end
  config.vm.provision "shell", inline: <<-SHELL
     sudo apt update
  SHELL

  # Configuración para el Servidor donde se instala WordPress
  config.vm.define "node1" do |machine|
    machine.vm.network "private_network", ip: "192.168.33.11"
    machine.vm.network "forwarded_port", guest: 80, host: 80
    machine.vm.provision "shell", inline: <<-SHELL
      sudo sed -i "/PasswordAuthentication no/c PasswordAuthentication yes" /etc/ssh/sshd_config # Permite Autenticacióon con Password
      sudo systemctl restart sshd
    SHELL
  end
    
  # Configuración para el Servidor donde se Instala Ansible
  config.vm.define 'controler' do |machine|
    machine.vm.synced_folder "provisioning/data", "/home/vagrant/data"
    machine.vm.network "private_network", ip: "192.168.33.10"
    machine.vm.provision "ansible_local" do |ansible|
      ansible.playbook        = "provisioning/playbook.yml" # Definición del Playbook a ejecutar en nodo 1
      ansible.install         = true
      ansible.limit           = "all"
      ansible.inventory_path = "inventory" # Definición del Inventario a usar por Ansible
    end
  end
 end

