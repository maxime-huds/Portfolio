import yfinance as yf
import matplotlib.pyplot as mplt

indice = '^GSPC'

data = yf.Ticker(indice)

prix = data.history(period="1d", start='2023-1-1', end='2023-3-15')

print(prix)

print("")
print("==============================")

prix['Close'].plot(color="red",linestyle='solid')

mplt.show() 
