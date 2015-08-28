# NewUp Playground Alpha

[![Latest Stable Version](https://poser.pugx.org/newup-playground/alpha/v/stable)](https://packagist.org/packages/newup-playground/alpha) [![Total Downloads](https://poser.pugx.org/newup-playground/alpha/downloads)](https://packagist.org/packages/newup-playground/alpha) [![Latest Unstable Version](https://poser.pugx.org/newup-playground/alpha/v/unstable)](https://packagist.org/packages/newup-playground/alpha) [![License](https://poser.pugx.org/newup-playground/alpha/license)](https://packagist.org/packages/newup-playground/alpha)

This playground exists to test the components built into the [NewUp Package Generation System](https://github.com/newup/newup) system that allow for package template dependencies to be located and auto-loaded at runtime, without replacing any current auto-loaders.

## Using The Playground

First make sure that NewUp is installed and configured, and then issue the following commands:

~~~
newup template:install newup-playground/alpha

newup a newup-playground/alpha .
~~~

> As of the [0.0.2 pre-release](https://github.com/newup/core/releases/tag/0.0.2) version, you can simply issue the command `newup a newup-playground/alpha .`. Interactive messages will prompt the install of the package.

The `alpha` template should be installed and configured with the first command. The second command should execute the template's core code, and the following output will appear if everything was successful:

~~~
NewUp Playground Alpha
You should see HTML below, and not markdown.

<h1>Hello World!</h1>
~~~