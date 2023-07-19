package com.example.musicsh.Service_API;

public class APIService {
    private static String base_url = "https://huy329.000webhostapp.com/Server/";
    public static Dataservice getService(){
        return APIRetrofitClient.getClient(base_url).create(Dataservice.class);
    }
}
