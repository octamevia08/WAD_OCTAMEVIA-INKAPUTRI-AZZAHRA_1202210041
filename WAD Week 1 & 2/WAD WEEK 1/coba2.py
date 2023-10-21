import pandas as pd

data = pd.read_excel('c:/Users/62821/Downloads/dwbi.xls')

paling_banyak_terjual = data['Product Name'].value_counts().idxmax()

total_penjualan = data['Sales'].sum()

state_transaksi = data['State'].value_counts().idxmax()

pelanggan_terbanyak = data.groupby('Customer Name')['Sales'].sum().nlargest(5).index.tolist()

penjualan_office_supplies = data[data['Category'] == 'Office Supplies']['Quantity'].sum()

revenue = data.groupby('Sub-Category')['Sales'].sum().idxmax()

print("a. Product apa yang paling banyak terjual : ", paling_banyak_terjual)
print("b. Total Penjualan : ", total_penjualan)
print("c. State yang paling banyak terjadi transaksi : ", state_transaksi)
print("d. 5 Pelanggan yang banyak berkontribusi dalam pembelian barang : ", pelanggan_terbanyak)
print("e. Total office supplies yang terjual : ", penjualan_office_supplies)
print("f. Sub-Category yang paling banyak memberikan revenue : ", revenue)