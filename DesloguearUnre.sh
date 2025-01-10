echo "Revisando extensiones en UNRECHABLE..."

unreachable_peers=$(rasterisk -rx 'sip show peers' | grep UNRE | awk -F'/' '{print $1}')

echo "Extensiones UNREACHABLE encontradas:"
echo "$unreachable_peers"

for exten in $unreachable_peers; do
    echo "Desregistrando extensión: $exten"
    rasterisk -rx "sip unregister $exten"
done


echo "Proceso completado."