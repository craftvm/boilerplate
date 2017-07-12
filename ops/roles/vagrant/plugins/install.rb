required_plugins = %w( vagrant-hostsupdater vagrant-vbguest vagrant-bindfs )
required_plugins.each do |plugin|
    exec "vagrant plugin install #{plugin};vagrant #{ARGV.join(" ")}" unless Vagrant.has_plugin? plugin || ARGV[0] == 'plugin'
end
