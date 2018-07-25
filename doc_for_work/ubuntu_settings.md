###* setting .hyper
```
fontFamily: '"DejaVu Sans Mono for Powerline", Menlo, "DejaVu Sans Mono", Consolas, "Lucida Console", monospace',
shell: 'C:\\Users\\minwo\\AppData\\Local\\Microsoft\\WindowsApps\\ubuntu1804.exe',
shellArgs: [],
bell: false,
plugins: [
  'hyperpower',
  'hyper-electron-highlighter'
],
keymaps: {
  'tab:new': 'ctrl+t',
  'pane:close': 'ctrl+w',
  'editor:copy': 'ctrl+c',
  'editor:paste': 'ctrl+v',
  'editor:selectAll': 'ctrl+a'
}

```

###* install zsh, oh-my-zsh
```bash
$ sudo apt-get install zsh

# add Launch zsh code in ~/.bashrc
if [ -t 1];
then
  exec zsh
fi

$ source ~/.bashrc

$ curl -L https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh | sh

# change code in ~/.zshrc
ZSH_THEME="robbyrussell" -> agnoster
```

###* install Fonts
DejaVu Sans Mono Bold for Powerline.ttf

###* remove dir highlight

```bash
$ vim ~/.zshrc
$ LS_COLORS='ow=01;36;40'
$ export LS_COLORS
$ source ~/.zshrc
```


###* remove user name

```bash
$ vim ~/.zshrc
$ DEFAULT_USER=`whoami`
$ source ~/.zshrc
```