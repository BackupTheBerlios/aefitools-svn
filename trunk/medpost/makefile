
install :
	perl util/install.perl $(OSTYPE)

uninstall :
	perl uninstall.perl

distribute :
	perl uninstall.perl
	cat models/lex.{end,closed,open_10000} > models/lex.cur
	tar cf medpost.tar `cat file.list`
	gzip -f medpost.tar
