# Base Image
FROM ubuntu:22.04

# パッケージをアップデート&インストール
RUN apt-get update && \
  apt-get -y upgrade && \
  apt-get -y install sudo less ncal cron vim nano locales man-db && \
  yes | unminimize && \
  locale-gen ja_JP.UTF-8

ARG USER

RUN useradd -m $USER \
  && echo 'root:root_pass' |chpasswd \
  && echo "$USER:camp_pass" |chpasswd \
  && echo "$USER    ALL=(ALL)       ALL" >> /etc/sudoers

USER $USER
WORKDIR /home/$USER/linux

RUN echo 'export PS1="\n\[\033[35m\]\u@\h\[\033[00m\]:\[\033[36m\]\w\[\033[00m\]\n[app] \$ "' >> ~/.bashrc \
  && echo 'export LANG=ja_JP.UTF-8' >> ~/.bashrc \
  && echo ':set encoding=utf-8' > ~/.vimrc
