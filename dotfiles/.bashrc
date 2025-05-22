# 色付きのプロンプト
PS1='\[\e[1;32m\]\u@\h:\w\$\[\e[0m\] '

# コマンド補完を強化する
if [ -f /etc/bash_completion ]; then
    . /etc/bash_completion
fi

# コマンド履歴を拡張する
export HISTSIZE=10000      # 保存する履歴の数
export HISTFILESIZE=20000  # 履歴ファイルのサイズ
shopt -s histappend        # 履歴を追記する
PROMPT_COMMAND='history -a'

# alias（短縮コマンド）を設定する
alias ll='ls -lh --color=auto'
