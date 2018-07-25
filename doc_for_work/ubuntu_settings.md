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