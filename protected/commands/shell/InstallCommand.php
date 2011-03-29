<?php
/**
 * InstallCommand class file.
 *
 * @author Tobias Munk <schmunk@usrbin.de>
 * @link http://www.phundament.com/
 * @copyright Copyright &copy; 2011 diemeisterei GmbH
 * @version $$
 */

/**
 * InstallCommand checks the installation status of an application
 *
 * @author Tobias Munk <schmunk@usrbin.de>
 * @version $$
 * @package p3.commands.shell
 * @since 1.0
 */
class InstallCommand extends CConsoleCommand
{
	public function getHelp()
	{
		return <<<EOD
USAGE
  install

DESCRIPTION
  tbd

PARAMETERS
 tbd

EXAMPLES
 tbd

EOD;
	}

	/**
	 * Execute the action.
	 * @param array command line parameters specific for this command
	 */
	public function run($args)
	{
	    if(!is_writable("assets")) {
	        echo "✗ Assets directory not writable";
	    } else {
	        echo "✓ Assets directory OK";
	    }
		echo <<<EOD

Installation checks completed.

EOD;
	}
}