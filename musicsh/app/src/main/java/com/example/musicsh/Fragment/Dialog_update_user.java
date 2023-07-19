package com.example.musicsh.Fragment;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.DialogFragment;

import com.example.musicsh.R;
import com.google.android.material.textfield.TextInputEditText;
import com.squareup.picasso.Picasso;

import de.hdodenhof.circleimageview.CircleImageView;

public class Dialog_update_user extends DialogFragment {
    ExampleDialogListenerUpdateUser listener;
    private CircleImageView avt;
    private TextInputEditText edt_name_user;
    private String username ="", name = "", url_img = "";
    int IMG_REQUEST = 21;
    private Bitmap bitmap = null;

    public Dialog_update_user(String username, String name, String url_img){
        this.username = username;
        this.name = name;
        this.url_img = url_img;
    }

    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.dialog_update_profile, container, false);
        avt = view.findViewById(R.id.img_avt);
        edt_name_user = view.findViewById(R.id.txt_update_nameuser);
        getDialog().getWindow().setBackgroundDrawable(new ColorDrawable(Color.TRANSPARENT));
        Init(name, url_img);
        return view;
    }

    private void Init(String name, String img){
        edt_name_user.setText(name);
        Picasso.get().load(img).into(avt);
    }

    @Override
    public void onAttach(@NonNull Context context) {
        try {
            listener = (ExampleDialogListenerUpdateUser) getTargetFragment();
        }catch (Exception e){

        }
        super.onAttach(context);
    }

    public interface ExampleDialogListenerUpdateUser{
        void apply(String tenUser, Bitmap bitmap);
    }
}
