$TTL    604800
@       IN      SOA     ocp-service.lab.ocp.php. admin.lab.ocp.php. (
                  1     ; Serial
             604800     ; Refresh
              86400     ; Retry
            2419200     ; Expire
             604800     ; Negative Cache TTL
)

; name servers - NS records
    IN      NS      ocp-service.lab.ocp.php.

; name servers - A records
ocp-service.lab.ocp.php.          IN      A       192.168.2.210

; OpenShift Container Platform Cluster - A records
ocp-bootstrap.lab.ocp.php.     IN      A      192.168.2.205
;
;
ocp-master.lab.ocp.php.       IN      A      192.168.2.200
ocp-master1.lab.ocp.php.      IN      A      192.168.2.201
ocp-master2.lab.ocp.php.      IN      A      192.168.2.202
;
ocp-worker1.lab.ocp.php.      IN      A      192.168.2.203
ocp-worker2.lab.ocp.php.      IN      A      192.168.2.204

; OpenShift internal cluster IPs - A records
api.ocp-clus.lab.ocp.php.    	 IN    A    192.168.2.210
api-int.ocp-clus.lab.ocp.php.   IN    A    192.168.2.210
;
;
*.apps.ocp-clus.lab.ocp.php.     IN    A    192.168.2.210
;
;
etcd-0.lab.ocp.php.    IN    A    192.168.2.200
etcd-1.lab.ocp.php.    IN    A    192.168.2.201
etcd-2.lab.ocp.php.    IN    A    192.168.2.202
console-openshift-console.apps.lab.ocp.php.     IN     A     192.168.2.210
oauth-openshift.apps.lab.ocp.php.  		  IN     A     192.168.2.210

; OpenShift internal cluster IPs - SRV records
_etcd-server-ssl._tcp.lab.ocp.php.    86400     IN    SRV     0    10    2380    etcd-0.lab
_etcd-server-ssl._tcp.lab.ocp.php.    86400     IN    SRV     0    10    2380    etcd-1.lab
_etcd-server-ssl._tcp.lab.ocp.php.    86400     IN    SRV     0    10    2380    etcd-2.lab
