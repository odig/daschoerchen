# Choerchen Event Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of the plugin.**

The **Choerchen Event** Plugin is an extension for [Grav CMS](https://github.com/getgrav/grav). Extension of Events for Choerchen

## Installation

Installing the Choerchen Event plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](https://learn.getgrav.org/cli-console/grav-cli-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install choerchen-event

This will install the Choerchen Event plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/choerchen-event`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `choerchen-event`. You can find these files on [GitHub](https://github.com//grav-plugin-choerchen-event) or via [GetGrav.org](https://getgrav.org/downloads/plugins).

You should now have all the plugin files under

    /your/site/grav/user/plugins/choerchen-event
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com//grav-plugin-choerchen-event/blob/main/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/choerchen-event/choerchen-event.yaml` to `user/config/plugins/choerchen-event.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named choerchen-event.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

