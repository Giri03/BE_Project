sapply(training.data.raw,function(x) sum(is.na(x)))
class(training.data.raw)

library(itsmr)
library(forecast)
library(tseries)
data <- read.csv('SPI.csv')
View(data)
#data$SPI[is.infinite(data$SPI)] <- mean(data$SPI,infinite.rm=T)
ts <- ts(data$SPI, start=c(1901,1), end=c(2017,12), frequency=12)

ts <- tsclean(ts)
plot(ts, main="SPI", xlab= "Date", ylab="SPI")

decomp <- stl(ts, s.window = "periodic")
plot(decomp)

nsdiffs(ts)

auto.arima(ts)

model <- Arima(ts, order=c(2,0,4), seasonal = list(order=c(2,0,0), period=12))
tsdisplay(model$residuals, main = "ARIMA(2,0,4)(2,0,0)[12]", lag.max = 40)

AIC(model)

accuracy(model)

summary(model)

test(model$residuals)

f <- forecast(model, level=95, h=120)

f
#plot(f)

