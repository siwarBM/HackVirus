package com.example.covid19;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import androidx.appcompat.app.AppCompatActivity;

public class mg extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.carfour);}

    public void carfour1 (View view) {
        startActivity(new Intent(com.example.covid19.mg.this, lait.class));
    }
    public void carfour2 (View view) {
        startActivity(new Intent(com.example.covid19.mg.this, viande.class));
    }
    public void carfour3 (View view) {
        startActivity(new Intent(com.example.covid19.mg.this, fruits.class));
    }
    public void carfour4 (View view) {
        startActivity(new Intent(com.example.covid19.mg.this, biscuit.class));
    }
}
