# -*- mode: ruby -*-
# vi: set ft=ruby :
 
Vagrant.configure("2") do |config|
  config.vm.box = "hashicorp/precise32"
  config.vm.network "private_network", ip: "192.168.50.151"
  config.vm.provider :virtualbox do |vb|
    vb.memory = 2048
    vb.cpus = 2
  end

  src_dir = './'
  doc_root = '/vagrant_data/public'
  app_root = '/vagrant_data/'

  config.vm.synced_folder src_dir, "/vagrant_data", :create => true, :owner=> 'vagrant', :group=>'www-data', :mount_options => ['dmode=775,fmode=775']
  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = "cookbooks"
    chef.add_recipe "apt"
    chef.add_recipe "php_nginx"
    chef.add_recipe "local_db"
    chef.add_recipe "local_etc"
    chef.add_recipe "deploy_laravel_local"
    chef.json = {doc_root: doc_root,app_root: app_root}
  end
 
end
