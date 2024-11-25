import mysql.connector
import random
import string

# Datos de conexión a tu base de datos
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="db_autobuses"
)

mycursor = mydb.cursor()

# Lista de marcas y modelos
marcas = ['Toyota', 'Honda', 'Ford', 'Nissan', 'Chevrolet']
modelos = ['Corolla', 'Civic', 'Mustang', 'Sentra', 'Camaro']

# Número de registros a insertar
num_registros = 30

# Construir la sentencia INSERT
sql = "INSERT INTO autobuses (marca, modelo, placa) VALUES (%s, %s, %s)"

# Función para generar placas únicas
def generar_placa():
    while True:
        placa = ''.join(random.choices(string.ascii_uppercase, k=3)) + str(random.randint(1000, 9999))
        # Puedes agregar aquí más lógica para personalizar el formato de la placa
        return placa

# Generar los datos y ejecutar las inserciones
for i in range(num_registros):
    marca = random.choice(marcas)
    modelo = random.choice(modelos)
    placa = generar_placa()
    update_at = timestamp()
    val = (marca, modelo, placa)
    mycursor.execute(sql, val)

mydb.commit()
print(mycursor.rowcount, "registros insertados")