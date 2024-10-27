zone "ocp.php" {
    type master;
    file "/etc/named/zones/db.ocp.php"; # zone file path
};

zone "2.168.192.in-addr.arpa" {
    type master;
    file "/etc/named/zones/db.192.168.2";  # 192.168.2.0/24 subnet
};
