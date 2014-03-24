<?php
    namespace Phork\Composer;
    
    use Composer\Composer;
    use Composer\IO\IOInterface;
    use Composer\Plugin\PluginInterface;
    
    class InstallerPlugin implements PluginInterface
    {
        /**
         * {@inheritDoc}
         */
        public function activate(Composer $composer, IOInterface $io)
        {
            $installer = new Installer($io, $composer);
            $composer->getInstallationManager()->addInstaller($installer);
        }
    }
