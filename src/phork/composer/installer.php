<?php
	namespace Phork\Composer;

	use Composer\Package\PackageInterface;
	use Composer\Installer\LibraryInstaller;
	
	class Installer extends LibraryInstaller {
		
		/**
		 * {@inheritDoc}
		 */
		protected function getPackageBasePath(PackageInterface $package) {
			if (preg_match('|microphork/package-([-\w]+)|', $package->getPrettyName(), $matches)) {
				$name = $matches[1];
			} else {
				throw new \InvalidArgumentException('Unable to install package. The package name must start with "microphork/package-".');
			}
		
			$this->initializeVendorDir();
			return ($this->vendorDir ? $this->vendorDir.'/' : '').'microphork/packages/'.$name;
		}
	
		
		/**
		 * {@inheritDoc}
		 */
		public function supports($packageType) {
			return $packageType === 'microphork-package';
		}
	}