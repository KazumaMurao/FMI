
"vi Compatible OFF
set nocompatible
set hlsearch

"Display
set number
set showmatch
syntax on

"Input
set backspace=2
set autoindent
"set shiftwidth=4
set tabstop=4
set expandtab

"Encode
set encoding=utf-8
set fileencodings=utf-8,iso-2022-jp,euc-jp,ucs-2le,ucs-2,cp932

"Save cursor position
augroup vimrcEx
  autocmd!
  autocmd BufReadPost *
    \ if line("'\"") > 1 && line("'\"") <= line('$') |
    \   exe "normal! g`\"" |
    \ endif
augroup END
