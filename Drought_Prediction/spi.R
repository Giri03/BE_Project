spi <-
function(nargs,filename,id,fd,title,output,txlab,tylab, district) 
{
 options(max.print=9999999)
 dados1 <- read.table(filename, sep=",", header=TRUE)
 dados1 <- subset(dados1, District == district)
 dados1

 ncolumn=nrow(dados1)

 for(m in 2:ncol(dados1))
 {
    if(m==2)
       dat_aux=dados1[,m]
    else
	 {
         dat_aux2=rbind(dat_aux,dados1[,m])
         dat_aux=dat_aux2
	 } 
 }

 dados=dat_aux

 nlin=nrow(dados)
 if (nargs<3){
    return("Error: very small number of arguments")
 }  else {

          if (nargs>7){
             return("Error: very large number of arguments") }

          else if (nargs==3){
             tit=paste("Standard Precipitation Index", sep="") 
             output=2
          }
          else if (nargs==4){
             output=2
          }
          else {
                tit=paste(title,sep="") }
             ndates= fd - id + 1
         }

 data=dados[,1:ncolumn]
 dates=seq(id,fd,1)
 quad=1:ncolumn
 dates_ts=seq(id,fd,1)

 for(i in 2:ncolumn)
 {
    if (i==2) {
       data_aux1=rbind( t(data[i-1,]),t(data[i,])) 
       }
    else {
          data_aux=rbind( data_aux1, t(data[i,]) )
      }
 }
 data2=data_aux

 #Routine for Calculating SPI
 fit.cdf <- ecdf(data2)
 cdfs <- sapply(data,fit.cdf)
 SPI <- qnorm(cdfs)
 SPI
 #write.table(SPI, file = "MyData.csv",row.names=TRUE, na="",col.names=district, sep=",")
 #plot(SPI)
} 
spi(7,"data_spi.csv", 1901, 2017, "SPI",1,"years","months", 'Beed')



##End spi function
#data(spi_data1)

##write to file
#write.table(spi_data1,file="spi_datas.csv",quote=FALSE,row.names=TRUE)	  

##Standard format with the output in the text format
#data <- read.table(file="spi_datas.csv", sep=",", row.names=1, header=TRUE)
#data

##write.table(data,file="spi_datas.csv",quote=FALSE,row.names=TRUE)
#read.table('spi_data.xlsx', header=TRUE, skipNul = TRUE)
#spi(3,"spi_data.txt",1963,2010,"SPI",1,"years","months")