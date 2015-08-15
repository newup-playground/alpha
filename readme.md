# NewUp Playground Alpha

This playground exists to test the components built into the [NewUp Package Generation System](https://github.com/newup/newup) system that allow for package template dependencies to be located and auto-loaded at runtime, without replacing any current auto-loaders.

## Using The Playground

First make sure that NewUp is installed and configured, and then issue the following commands:

~~~
newup template:install newup-playground/alpha

newup a newup-playground/alpha .
~~~

The `alpha` template should be installed and configured with the first command. The second command should execute the template's core code, and the following output will appear if everything was successful:

~~~
NewUp Playground Alpha
You should see HTML below, and not markdown.

<h1>Hello World!</h1>
~~~